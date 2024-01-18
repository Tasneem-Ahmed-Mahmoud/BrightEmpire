<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use RealRashid\SweetAlert\Facades\Alert;

class ReviewController extends Controller
{
    function index()
    {
        confirmDelete('delete', 'are you sure to delete?');
        $reviews = Review::with(['image'])->paginate(10, ['id', 'name', 'message']);
      
        return view('dashboard.reviews.index', compact('reviews'));
    }


    function create()
    {
        return view('dashboard.reviews.create');
    }

    function store(ReviewRequest $request)
    {


        try {
            DB::transaction(function ($query) use ($request) {
                $review = Review::create([
                    'name' => $request->name,
                    'message' => $request->message,
                ]);
                $review->image()->create([
                    'name' => uploadImage($request->image, Review::PATH),
                    'alt' => $request->alt
                ]);
            });
        } catch (\Exception $e) {

            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'stored successfully');
        return to_route('reviews.index');
    }



    function edit(Review $review)
    {

        return view('dashboard.reviews.edit', compact('review'));
    }

    function update(ReviewRequest $request, Review $review)
    {
        $image = $request->hasFile('image') ? uploadImage($request->image, review::PATH, $review->image->name) : $review->image->name;


        try {
            DB::transaction(function () use ($request, $review, $image) {
                $review->update([
                    'name' => $request->name,
                    'message' => $request->message,
                ]);

                $review->image()->update([
                    'name' => $image,
                    'alt' => $request->alt
                ]);
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'updated successfully');

        return redirect()->back();
    }
    function destroy(Review $review)
    {

        try {
            DB::transaction(function () use ($review) {
                deleteImage($review->image->name, Review::PATH);
                $review->image()->delete();
                $review->delete();
            });
        } catch (\Exception $e) {
            Alert::error('error', 'Transaction failed: ' . $e->getMessage());
        }

        Alert::success('success', 'deleted successfully');

        return redirect()->back();
    }
}

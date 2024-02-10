<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;
use Exception;
trait DomTrait{
    // private function uploadContentFiles($content)
    // {
    //     $dom = new \DomDocument();
    //     $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    //     $files = $dom->getElementsByTagName('file'); // Assuming a custom tag for file uploads

    //     foreach ($files as $file) {
    //         $data = $file->getAttribute('src');
    //         // Assuming the file is base64 encoded
    //         list(, $data) = explode(',', $data);
    //         $data = base64_decode($data);

    //         // Generate a unique filename with an image extension
    //         $file_extension = 'png'; // Change this to the desired image extension
    //         $file_name = "/upload/" . time() . '_' . rand(100, 999) . '.' . $file_extension;

    //         $path = public_path() . $file_name;

    //         // Check if the directory exists, if not, create it
    //         $directory = pathinfo($path, PATHINFO_DIRNAME);
    //         if (!File::isDirectory($directory)) {
    //             File::makeDirectory($directory, 0755, true, true);
    //         }

    //         file_put_contents($path, $data);
    //         $file->removeAttribute('src');
    //         $file->setAttribute('src', $file_name);
    //     }

    //     return $dom->saveHTML();
    // }


    private function uploadContentFiles($content)
{
    if(!$content){
        return null;
    }
    // Create a DOMDocument object
    $dom = new \DOMDocument();

    // Suppressing errors for malformed HTML during loading
    libxml_use_internal_errors(true);
    $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    // Get all file elements
    $files = $dom->getElementsByTagName('file');

    foreach ($files as $file) {
        // Get the source attribute value
        $src = $file->getAttribute('src');

        // Validate if the source attribute is present
        if (!empty($src)) {
            // Assuming the file is base64 encoded
            $data = explode(',', $src);
            if (count($data) === 2) {
                $data = base64_decode($data[1]);

                // Generate a unique filename with an image extension
                $file_extension = 'png'; // Change this to the desired image extension
                $file_name = "/upload/" . time() . '_' . rand(100, 999) . '.' . $file_extension;

                $path = public_path() . $file_name;

                // Check if the directory exists, if not, create it
                $directory = pathinfo($path, PATHINFO_DIRNAME);
                if (!is_dir($directory)) {
                    mkdir($directory, 0755, true);
                }

                // Write the file content to the path
                if (file_put_contents($path, $data) !== false) {
                    // Update the src attribute with the new file path
                    $file->setAttribute('src', $file_name);
                } else {
                    // Handle error if unable to write file
                    // You may want to log the error or handle it accordingly
                    // For instance, throw an exception
                    throw new Exception("Failed to write file to path: $path");
                }
            } else {
                // Handle error if the src attribute doesn't have valid base64 format
                // You may want to log the error or handle it accordingly
                // For instance, throw an exception
                throw new Exception("Invalid base64 format for src attribute: $src");
            }
        } else {
            // Handle error if src attribute is empty or missing
            // You may want to log the error or handle it accordingly
            // For instance, throw an exception
            throw new Exception("src attribute is empty or missing for file element");
        }

        // Remove the src attribute to prevent re-processing
        $file->removeAttribute('src');
    }

    // Save and return the modified HTML content
    return $dom->saveHTML();
}

}
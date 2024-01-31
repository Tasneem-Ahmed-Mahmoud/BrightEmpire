<?php

namespace App\Traits;
use Illuminate\Support\Facades\File;

trait DomTrait{
    private function uploadContentFiles($content)
    {
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $files = $dom->getElementsByTagName('file'); // Assuming a custom tag for file uploads

        foreach ($files as $file) {
            $data = $file->getAttribute('src');
            // Assuming the file is base64 encoded
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            // Generate a unique filename with an image extension
            $file_extension = 'png'; // Change this to the desired image extension
            $file_name = "/upload/" . time() . '_' . rand(100, 999) . '.' . $file_extension;

            $path = public_path() . $file_name;

            // Check if the directory exists, if not, create it
            $directory = pathinfo($path, PATHINFO_DIRNAME);
            if (!File::isDirectory($directory)) {
                File::makeDirectory($directory, 0755, true, true);
            }

            file_put_contents($path, $data);
            $file->removeAttribute('src');
            $file->setAttribute('src', $file_name);
        }

        return $dom->saveHTML();
    }
}
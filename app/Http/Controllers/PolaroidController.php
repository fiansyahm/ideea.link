<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; // Corrected import statement
use Illuminate\Support\Facades\Storage;

class PolaroidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_polaroid()
    {
        return view('polaroid.home');
    }

    public function upload_polaroid(Request $request)
    {
        $email = $request->email;

        // Mengambil file foto yang diunggah
        $uploadedZip = $request->file('foto');

        // Ekstrak file zip dan menyimpannya ke direktori yang sesuai
        $extractedFiles = $this->extractZipAndSave($uploadedZip, $email);

        if ($extractedFiles) {
            // Anda dapat melakukan lebih banyak hal di sini, seperti menyimpan path ke database

            // Mengembalikan respons atau melakukan hal lain yang diperlukan
            return redirect()->back()->with('success', 'Foto berhasil diunggah!');
        } else {
            // Handle error jika ada masalah dengan ekstraksi atau penyimpanan
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengunggah foto.');
        }
    }

    private function extractZipAndSave($zipFile, $email)
    {
        // Ekstrak file zip ke direktori sementara
        $tempPath = storage_path("app/public/$email");
        $zip = new \ZipArchive;

        if ($zip->open($zipFile) === true) {
            $zip->extractTo($tempPath);
            $zip->close();

            // Loop through extracted files and move them to the desired directory
            $extractedFiles = [];
            
            // $files = File::allFiles($tempPath);
            // foreach ($files as $file) {
            //     // Create UploadedFile instance from SplFileInfo
            //     $uploadedFile = new \Illuminate\Http\UploadedFile(
            //         $file->getPathname(),
            //         $file->getFilename(),
            //         File::mimeType($file->getPathname()), // Get mime type using File::mimeType
            //         $file->getSize(),
            //         null,
            //         true // true means the file is already validated
            //     );

            //     // Move the file to the desired directory
            //     $newPath = $uploadedFile->move(storage_path("app/public/$email"), $file->getFilename());
            //     $extractedFiles[] = $newPath;
            // }

            // // Cleanup: Remove temporary extraction directory
            // File::deleteDirectory($tempPath);

            return $extractedFiles;
        }

        return false;
    }

    public function list_polaroid($photo, $page, $size)
    {
        $themes=Theme::all();
        // Mendapatkan daftar file di folder
        $files = Storage::files("public/$photo");
        
        if($size=="2R"){
            $photoperpage = 9;
        }else if($size=="3R"){
            $photoperpage = 4;
        }
        else{
            $photoperpage = 1;
        }
        $start = $page * $photoperpage - $photoperpage;

        // Menggunakan array_slice untuk membatasi jumlah file yang diambil
        $files = array_slice($files, $start, $photoperpage);
        $curr = $page;
        $next = $page + 1;
        $prev = $page - 1;

        // Mengembalikan view dengan daftar file dan objek halaman
        return view('polaroid.list', ['files' => $files, 'curr' => $curr, 'next' => $next, 'prev' => $prev, 'photo' => $photo, 'size' => $size, 'themes' => $themes]);
    }

    public function background_polaroid(){
        $themes = Theme::all();
        $themeArray = [];
    
        foreach ($themes as $theme) {
            $themeArray[] = $theme->theme;
        }
    
        $themeArray = array_unique($themeArray);
        return view('polaroid.background', ['themes' => $themeArray]);
    }

    public function detail_background_polaroid($id){
        $themes=Theme::all()->where('theme', $id);
        return view('polaroid.background-detail', ['themes' => $themes]);
    }

    public function delete_background_polaroid($id){
        $themes=Theme::find($id);
        $themes->delete();
        return redirect()->back()->with('status', 'Background berhasil dihapus!');
    }

    public function edit_background_polaroid($id){
        $themes=Theme::find($id);
        return view('polaroid.edit-background', ['themes' => $themes]);
    }

    public function update_background_polaroid(Request $request, $id){
        $themes=Theme::find($id);
        $themes->name = $request->name;
        $themes->url= $request->url;
        $themes->theme= $request->theme;
        $themes->save();
        return redirect()->back()->with('status', 'Background berhasil diubah!');
    }

    public function create_background_polaroid(){
        return view('polaroid.create-background');
    }

    public function add_background_polaroid(Request $request){
        $themes=new Theme;
        $themes->name = $request->name;
        $themes->theme= $request->theme;
        $themes->url= $request->url;
        $themes->save();
        return redirect()->back()->with('status', 'Background berhasil ditambahkan!');
    }

    public function symlink(){
        $linkFolder=public_path('storage');
        $targetFolder=storage_path('app/public');
       // Make sure the target folder exists before creating the symlink
        if (!is_dir($targetFolder)) {
            die('Target folder does not exist.');
        }

        // Use shell_exec to execute the ln -s command
        $command = "ln -s $targetFolder $linkFolder";
        $result = shell_exec($command);

        if ($result === null) {
            die('Error creating symlink.');
        }
        // ln -s /home/u971422264/domains/akad.in/public_html/storage/app/public /home/u971422264/domains/akad.in/public_html/public/storage
        echo 'Symlink process successfully completed';
    }
}

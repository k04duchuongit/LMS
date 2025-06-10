<?php

namespace App\Infrastructure\Support;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    public function uploadsImageAvatar($fileImage)
    {
      
        $extension = $fileImage->getClientOriginalExtension();

        // Tạo tên file mới, ví dụ: user_123456789.jpg
        $newFileName = '_' . time() . '.' . $extension;

        // Lưu file với tên mới vào thư mục avatars trong disk 'public'
        $filePath = $fileImage->storeAs('avatars', $newFileName, 'public');

        // Lưu đường dẫn file vào biến (đường dẫn dùng trong view là dạng 'storage/avatars/xxx.jpg')
        $fileImage = 'storage/' . $filePath;

        return $fileImage;
    }

    public function deleteAvatar(?string $path): void
    {
        if ($path && Storage::disk('public')->exists(str_replace('storage/', '', $path))) {
            Storage::disk('public')->delete(str_replace('storage/', '', $path));
        }
    }
}

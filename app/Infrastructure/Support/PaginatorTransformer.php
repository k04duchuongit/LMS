<?php

namespace App\Infrastructure\Support;

class PaginatorTransformer
{
    public static function transform($paginator, callable $callback)
    {    // Giữ lại LengthAwarePaginator sau khi chuyển đổi bản ghi sang dto,entity,viewmodel ...
        $tranformed = $paginator->getCollection()->map($callback);   // thực hiện chuyển đổi từ LengthAwarePaginator sang kiểu mong muốn

        return $paginator->setCollection($tranformed);          //  Gắn lại danh sách vào LengthAwarePaginator 
        // => giữ nguyên các thông tin phân trang (currentPage, total, links...), chỉ thay đổi dữ liệu hiển thị
    }
}

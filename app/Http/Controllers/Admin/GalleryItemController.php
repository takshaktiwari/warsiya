<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Takshak\Agallery\Models\GalleryItem;
use Takshak\Agallery\Traits\Controllers\Admin\GalleryItemControllerTrait;

class GalleryItemController extends Controller
{
    use GalleryItemControllerTrait;

    public function destroy(GalleryItem $galleries_item)
    {
        try {
            Storage::disk('public')->delete([
                $galleries_item->image_lg,
                $galleries_item->image_md,
                $galleries_item->image_sm
            ]);
        } catch (\Exception $e) {
            logger($e->getMessage());
        }
        $galleries_item->delete();
        return to_route('admin.galleries-items.index')->withSuccess('SUCCESS !! Gallery item has been successfully deleted.');
    }
}

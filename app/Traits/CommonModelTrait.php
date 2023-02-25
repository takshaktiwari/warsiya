<?php

namespace App\Traits;

trait CommonModelTrait {
	
	public function image_sm()
	{
	    return $this->imageUrl($this->image_sm);
	}
	public function image_md()
	{
	    return $this->imageUrl($this->image_md);
	}
	public function image_lg()
	{
	    return $this->imageUrl($this->image_lg);
	}
	public function imageUrl($image)
	{
	    return url('storage/app/'.$image);
	}
}

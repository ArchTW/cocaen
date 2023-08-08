<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author' => new UserResource($this->author),
            'category' => new CategoryResource($this->category),
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'cover' => $this->cover,
            'content' => $this->content,
            'views' => $this->views,
            'created_at' => $this->created_at != null ? $this->created_at->toDateTimeString() : null,
            'updated_at' => $this->updated_at != null ? $this->updated_at->toDateTimeString() : null,
        ];
        // return parent::toArray($request);
    }
}

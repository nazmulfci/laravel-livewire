<div>
   <tr wire:key="{{$post->id}}">
     <td> {{$post->id}} </td>
     <td> {{str($post->title)->words(8)}} </td>
     <td> {{str($post->description)->limit(45)}} </td>
     <td> <button wire:confirm="are you sure delete this item?" type="button" 
     wire:click="$parent.deletePost({{$post->id}})"> Delete </button> </td>
    </tr>
   </div>

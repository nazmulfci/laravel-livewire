<div>






<form wire:submit="save">
<p x-text="$wire.title"></p>
<input type="text" wire:model="title">
<small>
      char <span x-text="$wire.title.split(' ').length - 1"></span>
</small>
@error('title')
    <em> {{$message}} </em>
@enderror
<textarea wire:model="description"></textarea>
<small>
      char <span x-text="$wire.description.length"></span>
</small>
@error('description')
    <em> {{$message}} </em>
@enderror
<button> Save </button>
</form>

<table border='2' class="w-10">
    <tr>
        <th> SL </th>
        <th> Title </th>
        <th> Description </th>
    </tr>
@foreach ($posts as $post)
<livewire:post-row :$post />
    @endforeach
    
</table>
    
       
</div>

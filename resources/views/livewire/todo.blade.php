<div>
<form wire:submit='addValue'>
<input type="text" wire:model="todoInput">
<button type="submit"> Add </button>
</form>
    
    <ul>
        @foreach ($todos as $todo )
        <li> {{$todo}} </li>
        @endforeach
    </ul>
</div>

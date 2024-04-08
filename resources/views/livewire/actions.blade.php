<div>
    Result : <span>{{$count}}</span>
    <hr>
    <button wire:click="increment({{$count}})" style="border: 1px solid green; padding:5px">+</button>
    <button wire:click="unincrement" style="border: 1px solid green; padding:5px">-</button>
</div>

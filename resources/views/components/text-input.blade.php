<div>
    <label for="{{$name}}" class="font-semibold text-sm">{{$label}}</label><br/>
    <input
        type="text"
        id="{{$name}}"
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        value="{{old($name,$value)}}"
        class="p-1 w-2/3 border @error($name) border-red-600 @else border-sky-700 @enderror"
    >
</div>

     <label>
        Titulo
        <input type="text" name="title" value="{{ old('title',$posts->title) }}" >
        @error('title')
            <br/>
            <small style="color:red">{{ $message }}</small>
        @enderror
        <br/>
    </label>
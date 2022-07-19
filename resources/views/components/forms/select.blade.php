<div class="flex flex-wrap md:items-center mb-10">
    <div class="w-full md:w-1/4">
        <label class="block text-gray-700 font-bold md:text-right mb-1 md:mb-0 pr-4" for="cat-name">
            Kategorie
        </label>
    </div>
    <div class="w-full md:w-2/4">
        <select name="news_category" required class="peer shadow appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cat-name" >
            @foreach($optArray as $key => $optVal)
                <option value="{{$optVal->id}}">{{$optVal->name}}</option>
            @endforeach
        </select>
    </div>
</div>

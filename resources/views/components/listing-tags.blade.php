@props(['tagsCsv'])

@php
 $tags = explode(',', $tagsCsv)

/*  the explode() function is used to split a string into an array of substrings
 */
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
    >
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>
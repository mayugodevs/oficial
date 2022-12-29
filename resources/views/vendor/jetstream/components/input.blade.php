@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-whitetext dark:bg-black   dark:text-whitetext border dark:border-txtcommentply border-gray100 focus:border-green focus:border-green  rounded-md ']) !!}>

<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function () {
    $this->word_lower = strtolower($this->word);
});

?>

<div>
    <h1>元の値</h1>
    <p>{{ $word }}</p>
    <p>小文字に変換した値</p>
    <p>{{ $this->word_lower }}</p>
</div>

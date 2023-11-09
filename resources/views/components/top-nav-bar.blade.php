<div class="w-5/6">
    <div class="flex justify-between">
        <h3>Workspace</h3>
        <h3>Search bar</h3>
        <h1 class="mr-20">
            {{auth()->user()->name}}
        </h1>
    </div>
    
    {{$slot}}
</div>
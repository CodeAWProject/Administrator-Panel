<div class="w-5/6">
    <div class="flex justify-between mb-12 py-6">
        <h3>Workspace</h3>
        <h3>Search bar</h3>
        <h1 class="mr-20">
            {{auth()->user()->name}}
        </h1>
    </div>
    
    {{$slot}}
</div>
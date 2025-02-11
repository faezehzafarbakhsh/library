<x-basic>
    <x-slot:heading>
        Category Page
    </x-slot:heading>
<ul>
    @foreach($Categories as $Category)
        <li>
            <a href="/Categories/{{Category['id']}}" class="text-blue-50">
                <strong> {{$Category['title']}}</strong>
            </a>
        </li>
    @endforeach
</ul>

</x-basic>

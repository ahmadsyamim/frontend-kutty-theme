@foreach($items as $menu_item)
    @php ($hasChildren = count($menu_item->children) > 0)
    
        <a href="{{ url($menu_item->link()) }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $menu_item->title }}</a>
        @if ($hasChildren)
    
                @include('kutty.partials.menu-left', ['items' => $menu_item->children])
    
        @endif
    
@endforeach

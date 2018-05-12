<div id="sidebar">
  <h5>CATEGORIES</h5>
  <ul class="list-group">
    @foreach($side_categories as $side_category)
    <li>
        <a href="{{ route('category', ['id' => $side_category->id]) }}">{{ $side_category->name }}</a>
    </li>
    @endforeach
  </ul>
  <br>
  <hr>
  <br>
  <h5>LOCATIONS</h5>
  <ul class="list-group">
    @foreach($side_locations as $side_location)
    <li>
        <a href="{{ route('location', ['id' => $side_location->id]) }}">{{ $side_location->city }}</a>
    </li>
    @endforeach
  </ul>
</div>


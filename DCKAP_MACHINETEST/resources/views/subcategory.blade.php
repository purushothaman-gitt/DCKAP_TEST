@foreach($subcategories as $subcategory)
<li>
	<button type="button" class="btn btn-outline-secondary subcatebutton" name="{{$subcategory->category_name}}" value="{{$subcategory->id}}">{{$subcategory->category_name}}</button>
</li>
@endforeach

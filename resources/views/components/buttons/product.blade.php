@can('edit_product')
<button type="button" onclick="edit({{$id}})" class="btn btn-secondary">Edit
</button>
@endcan

@can('delete_product')
    <button type="button" onclick="deleteData({{ $id }})" class="btn btn-danger">Delete</button>
@endcan

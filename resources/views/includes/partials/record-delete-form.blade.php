<form style="display: inline" action="{{ route('frontend.delete.record') }}" method="post" onsubmit="return confirm('Are you sure you want delete this record? Reg Number: {{  $vehicle->reg_num ?? 'unavailable' }}')">
    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

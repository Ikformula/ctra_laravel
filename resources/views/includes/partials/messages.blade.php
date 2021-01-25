<script>
    @if($errors->any())

    @foreach($errors->all() as $error)
    toastr.error('{!! $error !!}')
    @endforeach

    @elseif(session()->get('flash_success'))

    @if(is_array(json_decode(session()->get('flash_success'), true)))
    toastr.success('{!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}')
    @else
    toastr.success('{!! session()->get('flash_success') !!}')
    @endif

    @elseif(session()->get('flash_warning'))

    @if(is_array(json_decode(session()->get('flash_warning'), true)))
    toastr.warning('{!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}')
    @else
    toastr.warning('{!! session()->get('flash_warning') !!}')
    @endif

    @elseif(session()->get('flash_info'))

    @if(is_array(json_decode(session()->get('flash_info'), true)))
    toastr.info('{!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}')
    @else
    toastr.info('{!! session()->get('flash_info') !!}')
    @endif

    @elseif(session()->get('flash_danger'))

    @if(is_array(json_decode(session()->get('flash_danger'), true)))
    toastr.error('{!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}')
    @else
    toastr.error('{!! session()->get('flash_danger') !!}')
    @endif

    @elseif(session()->get('flash_message'))

    @if(is_array(json_decode(session()->get('flash_message'), true)))
    toastr.info('{!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}')
    @else
    toastr.info('{!! session()->get('flash_message') !!}')
    @endif

    @endif

</script>

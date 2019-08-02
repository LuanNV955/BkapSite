<table class="table table-striped project-orders-table">
        <thead>
                <tr>
                @if (is_array($columns)) 
                	@foreach ($columns as $key => $label)
        		@if (is_array($label))
        		<?php $col_label = isset($label['label']) ? $label['label'] : ucfirst($key); ?>
        			<th>{{$col_label}}</th>
        		@else
        			<th>{{$label}}</th>
        		@endif
                	@endforeach
                        <th></th>
                @endif
                </tr>
        </thead>
<tbody>
@foreach ($data as $k => $row)
<?php 
        $current = \Request::route()->getName();
        $baseRoute = explode('.',$current)[0];
        $remove_link = $baseRoute.'.destroy';
        $show_link = $baseRoute.'.show';
        $edit_link = $baseRoute.'.edit';
?>
	<tr>
	@foreach ($columns as $col_name => $col_label)
		@if(is_array($col_label) && !empty($col_label['type']))
                <?php 
                        $type = $col_label['type']; 
                        $value = !empty($col_label['value']) ? $col_label['value'] : ''; 
                ?>
                        @if($type == 'img')
        			<?php $w = isset($col_label['w']) ? $col_label['w'] : 50; ?>
        			<td><img src="{{url('/').$row->$col_name}}" width="{{$w}}"></td>
        		@elseif($type == 'relation')
                        <?php 
                                $values = explode('.', $value);
                                $field_value = '';
                                if (count($values) == 2) {
                                       $relation = $values[0];
                                       $field = $values[1];
                                       if ($field == 'count') {
                                                $field_value = $row->$relation->$field();
                                       }else{
                                                $field_value = $row->$relation->$field;
                                       }
                                }
                         ?>
                               <td>{{$field_value}}</td>

                        @elseif($type == 'option')
                                <?php 
                                        $style = !empty($col_label['style']) ? $col_label['style'] : '';
                                        $val = !empty($col_label['value']) ? $col_label['value'] : '';
                                ?>
                                @if(!empty($col_label['image']))
                                <?php 
                                        $w = isset($col_label['image']['w']) ? $col_label['image']['w'] : 50;
                                        $image_file = isset($col_label['image']['field']) ? $col_label['image']['field'] : 'image';
                                ?>

                                   <td style="{{$style}}">
                                           <div class="media">
                                                   <a class="pull-left" href="{{route($show_link,['id' => $row->id])}}" style="margin-right: 10px">
                                                           <img class="media-object" src="{{url('/').$row->$image_file}}" width="{{$w}}">
                                                   </a>
                                                   <div class="media-body">
                                                           <strong class="media-heading">{{$row->$val}}</strong>
                                                           <p>Ngày tạo: {{$row->created_at}}</p>
                                                   </div>
                                           </div>
                                   </td>
                                @else
                                        <td style="{{$style}}">{{$row->$val}}</td>
                                @endif
                        @endif
                @else
			<td>{{$row->$col_name}}</td>
		@endif
	@endforeach


	<td  class="text-right">
                @if(Route::has($show_link))
		<a href="{{route($show_link,['id' => $row->id])}}" class="btn btn-sm btn-info" title="Xem"><i class="fa fa-eye"></i></a>
                @endif
                @if(Route::has($edit_link))
		<a href="{{route($edit_link,['id' => $row->id])}}" class="btn btn-sm btn-primary" title="Xem"><i class="fa fa-edit"></i></a>
                @endif
                @if(Route::has($remove_link))
                <form action="{{route($remove_link,['id' => $row->id])}}" method="POST" class="pull-right" accept-charset="utf-8">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-sm btn-danger" title="Xem" onclick="return confirm('Bạn có chắc muốn xóa dữ liệu này ?')"><i class="fa fa-trash"></i></button>
                </form>
		
                @endif
	</td>
	</tr>
@endforeach
</tbody>
</table>
<div class="clearfix"></div>
<div class="card">
        <div class="card-body">
                {{$data->appends(request()->only($appends))->links()}}
        </div>
</div>

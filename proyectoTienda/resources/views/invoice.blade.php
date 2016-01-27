


<table  class="table"> 

     <tr>
      <th>Clave</th>
      <th>Tipo de producto</th>      
      <th>Descripcion</th>
      <th>Costo de compra</th>
      <th>Costo de venta</th>
   
     </tr>
                    
 
 @foreach($data as $data)
 <tr> 


<td>  {{$data->CLAVE}}</td>
<td>  {{$data->tipoproducto}}</td>
<td>  {{$data->descripcion}}</td>
<td>  {{$data->costocompra}}</td>
<td>  {{$data->costoventa}}</td>
 </tr>

 


@endforeach

</table>


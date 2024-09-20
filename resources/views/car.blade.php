    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body><table border="1">
    <tr>
        <th>ชื่อรถยนต์</th>
        <th>ลิงค์โหลดเกมหมาๆ</th>
        <th>ประเภทรถยนต์(EN)</th>
        <th>เจ้าของรถ</th>
    </tr>
    @foreach ($cars as $item)
    <tr>
    <td>  {{$item -> car_name}} </td> 
       @if ($item -> car_type == 'Pickup')
       <td>กระบะ</td> 
       @elseif ($item -> car_type == 'Van')
       <td>รถตู้</td> 
       @elseif ($item -> car_type == 'Cabrio')
       <td>รถอะไรวะ</td> 
       @elseif ($item -> car_type == 'Sport Car')
       <td>รถสปอร์ท</td> 
       @endif
       <td>  {{$item -> car_type}} </td> 
       <td> 
                    @php
                        $owner = $users->firstWhere('id', $item->owner_id);
                    @endphp

                    @if ($owner)
                        {{ $owner->name }}
                    @else
                        เจ้าของไม่ทราบ
                    @endif
       </td> </tr>
    @endforeach

    </table>
    </body>
    </html>
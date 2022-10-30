@props(['user'])

<table align="" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date</th>
        <th>Gender</th>
        <th>Street Address</th>
        <th>Street Address 2</th>
        <th>City</th>
        <th>Region</th>
        <th>Postal</th>
        <th>Status</th>
        <th></th>
        <th></th>
    </tr>

    <tr class="table-success">
        <td>{{$user->id}}  </td>
        <td>{{$user->first_name}} </td>
        <td>{{$user->second_name}} </td>
        <td>{{$user->birth_date}} </td> 
        <td>{{$user->gender}}</td> 
        <td>{{$user->street_address}}</td>
        <td>{{$user->street_address_second}}</td>
        <td>{{$user->city}}</td>
        <td>{{$user->region}}</td> 
        <td>{{$user->postal}}</td> 
        <td>{{$user->status}}</td>
        <td ><a class='btn btn-sm btn-danger' href='database/delete.php?id=$rows[id]'>Delete</a></td>
        <td ><a class='btn btn-sm btn-primary' 
                                    href='edit.php?id=$rows[id]&first_name=$rows[fname]&last_name=$rows[lname]
                                    &birth_date=$rows[birth]&gender=$rows[gender]&street_address=$rows[street_address]
                                    &street_address_two=$rows[street_address_two]
                                    &city=$rows[city]&region=$rows[region]&postal=$rows[postal]&statuss=$rows[statuss] '>Edit</a></td>
    </tr>
</table>

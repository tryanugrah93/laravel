<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    </head>
    <body>

        <h2>Laravel</h2>
        <h3>Add Employee Data</h3>
    
        <a href="/employee"> Back</a>
        
        <br/>
        <br/>

        @foreach($employee as $emp)
            <form action="/employee/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $emp->employee_id }}"> <br/>
                Name <input type="text" required="required" name="name" value="{{ $emp->employee_name }}"> <br/>
                Position <input type="text" required="required" name="position" value="{{ $emp->employee_position }}"> <br/>
                Age <input type="number" required="required" name="age" value="{{ $emp->employee_age }}"> <br/>
                Address <textarea required="required" name="address">{{ $emp->employee_address }}</textarea> <br/>
                <input type="submit" value="Simpan Data">
            </form>
        @endforeach
    </body>
</html>
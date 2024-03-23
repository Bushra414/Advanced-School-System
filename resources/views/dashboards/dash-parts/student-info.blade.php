<h2>Students' Information</h2>
            <table>
                <tr>
                    <th>SID</th>
                    <th>Student Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Phone Number</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->SID }}</td>
                    <td>{{ $student->fullname }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->mother_name }}</td>
                    <td>{{ $student->phone_number }}</td>
                    
                </tr>
                @endforeach
            </table> 
            
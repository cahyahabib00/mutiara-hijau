<div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($docs as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->img }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

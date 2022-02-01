<ul>
    @foreach($data as $prov)
    <li>{{ $prov->name }}</li>
        <ul>
            @foreach($prov->regency as $regency)
                <li>{{ $regency->name }}</li>
                <ul>
                    @foreach($regency->district as $district)
                        <li>{{ $district->name }}</li>
                        <ul>
                            @foreach ($district->village as $village )
                                 <li>{{ $village->name }}</li>
                            @endforeach

                        </ul>
                    @endforeach
                </ul>
            @endforeach
        </ul>
    @endforeach
</ul>

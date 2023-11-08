<!DOCTYPE html>
<html>
<head>
    <title>Стовпчата діаграма SVG</title>
</head>
<body>
    <h1>Стовпчата діаграма SVG</h1>
    
    <svg width="400" height="300">

        <line x1="50" y1="10" x2="50" y2="260" style="stroke:black;stroke-width:2" />
        <line x1="50" y1="260" x2="350" y2="260" style="stroke:black;stroke-width:2" />

        <rect x="80" y="200" width="40" height="60" style="fill:blue" />
        <rect x="150" y="100" width="40" height="160" style="fill:green" />
        <rect x="220" y="160" width="40" height="100" style="fill:red" />

        <text x="30" y="20" fill="black">25</text>
        <text x="30" y="80" fill="black">50</text>
        <text x="30" y="140" fill="black">75</text>
        <text x="60" y="280" fill="black">Пункт 1</text>
        <text x="130" y="280" fill="black">Пункт 2</text>
        <text x="200" y="280" fill="black">Пункт 3</text>
    </svg>
</body>
</html>

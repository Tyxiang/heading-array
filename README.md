# heading array

example:

```php
include "heading-array.php";
$html = <<<EOD
<h1>heading-1</h1>
content-h1
<h2>heading-2</h2>
content-h2
<h2>heading-2</h2>
content-h2
EOD;
$array = heading_parse($html);
header('Content-type: application/json');
echo json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
```

output:

```json
{
  "h1": [
    {
      "title": "heading-1",
      "content": "content-h1",
      "others": "<h2>heading-2</h2>content-h2<h2>heading-2</h2>content-h2",
      "h2": [
        {
          "title": "heading-2",
          "content": "content-h2",
          "others": ""
        },
        {
          "title": "heading-2",
          "content": "content-h2",
          "others": ""
        }
      ]
    }
  ]
}
```

# heading array

Parse HTML into an array based on Heading.

example:

```php
include "heading-array.php";
$html = <<<EOD
<h1>heading-1</h1>
h1-content
<h2>heading-2</h2>
h2-content
<h2>heading-2</h2>
h2-content
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
      "content": "h1-content",
      "others": "<h2>heading-2</h2>h2-content<h2>heading-2</h2>h2-content",
      "h2": [
        {
          "title": "heading-2",
          "content": "h2-content",
          "others": ""
        },
        {
          "title": "heading-2",
          "content": "h2-content",
          "others": ""
        }
      ]
    }
  ]
}
```

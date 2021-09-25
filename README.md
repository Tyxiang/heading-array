# heading array

Parse HTML into an array based on Heading.

## usage

```php
include "heading-array.php";
$path = "demo.html";
$html = file_get_contents($path);
$array = heading_parse($html);
header('Content-type: application/json');
echo json_encode($array, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
```

## demo.html

```html
<h1>heading-1</h1>
h1-content
<h2>heading-2</h2>
h2-content
<h2>heading-2</h2>
h2-content
```

## output

```json
{
  "others": "<h1>heading-1</h1>h1-content<h2>heading-2</h2>h2-content<h2>heading-2</h2>h2-content",
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

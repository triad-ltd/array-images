# Laravel Nova Field - Array Images
A laravel nova field that will let you save your uploaded images path to your database in array format, change
to make paths in json data relative.

# Installation
```
```

# Usage
Create array images just call `TriadLtd\ArrayImages\ArrayImages` class and use `make` static method to create a field.
```
...
use TriadLtd\ArrayImages\ArrayImages;
...
public function fields(Request $request)
    {
        return [
            ...
            ArrayImages::make('Images', 'images'),
            ...
        ];
    }
...
```
That will create a field with name `Images`. Stored data will look like this.
```
[{
    "url": "/storage/wB04AbprHGxHw4I3sizXmuw9L4LBcG0wv0QEacAo.jpeg",
    "name": "wB04AbprHGxHw4I3sizXmuw9L4LBcG0wv0QEacAo.jpeg"
}, {
    "url": "/storage/eOuxUCjHGNokkHdOXYB7gGObxCvf7m30ridFpBpy.jpeg",
    "name": "eOuxUCjHGNokkHdOXYB7gGObxCvf7m30ridFpBpy.jpeg"
}, {
    "url": "/storage/nLkZp4vfpATEp56NStJfeAtKoHvmN2hapfxoNrEN.jpeg",
    "name": "nLkZp4vfpATEp56NStJfeAtKoHvmN2hapfxoNrEN.jpeg"
}]
```

# Notes
- make sure you have specified correct `APP_URL` on your application
- make sure you have specified default `FILESYSTEM_DRIVER` on your application

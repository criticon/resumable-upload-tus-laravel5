## Installation

Under project root directory run:

```
composer install

php artisan key:generate

mkdir storage/app/public/uploads/

Give your user and your web-server's user permissions to write-read-execute the storage folder,
including subfolders.
Set php directive max_post_size to appropriate value.

```

## Usage

1. Go to the page http://youtsite/upload
2. Select the file you want to upload
3. Press *Upload* button
4. Close browser tab and reopen it
5. Repeat steps 2 and 3 picking up the same file
6. See how quickly progress bar reaches the position it stops before browser tab was closed and keeps on moving slower

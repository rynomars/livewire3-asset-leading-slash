## Repo Showing Livewire3 Prepended Slash on Script Asset Bug
Livewire3 prepends a slash "/" on the script asset. This prevents users from being
able add a domain to the location of the asset_url.

The "livewire.asset_url" allows the user to configure the location of the script asset.
Livewire3 prepends a slash to the url of the livewire script file. This done on line 149
of FrontendAssets class in the js static method. (src/Mechanisms/FrontendAssets/FrontendAssets.php)

$url = (string) str($url)->start('/');

The previous version of Livewire allowed the user to use the full domain when specifying the location of livewire.js file.

This behavior prevents users from being able to host the script file on an asset server.

The included unit test, "test_response_livewirejs_does_not_have_forward_slash" shows the bug.  

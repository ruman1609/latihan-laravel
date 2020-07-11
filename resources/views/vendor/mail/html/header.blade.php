<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<!-- slot ini liat app name gaes -->
<img src="https://instagram.fbpn2-1.fna.fbcdn.net/v/t51.2885-15/e35/90809236_213231876448126_1648256862808383403_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=WiA61MkWC2IAX-4LyW7&oh=301d522913ccbe5182abbca3ef5119cb&oe=5F1D1870" class="logo" alt="Avatar Kelas L">
<!-- srcnya harus dari online -->
@else
<img src="https://instagram.fbpn2-1.fna.fbcdn.net/v/t51.2885-15/e35/90809236_213231876448126_1648256862808383403_n.jpg?_nc_ht=instagram.fbpn2-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=WiA61MkWC2IAX-4LyW7&oh=301d522913ccbe5182abbca3ef5119cb&oe=5F1D1870" class="logo" alt="Avatar Kelas L">
<!-- srcnya harus dari online -->
<br>
{{ $slot }}
@endif
</a>
</td>
</tr>

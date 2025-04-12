<x-mail::message>
#Correo por aprobar
<x-mail::panel>
Se ha creado uin nuevo post que necesita ser aprobado.
</x-mail::panel>
{{-- Al poner : delante de url, laravel interpreta que lo que contiene url es php --}}
<x-mail::button :url="route('posts.getPost', $post)" color="primary">Click para probar</x-mail::button>

</x-mail::message>
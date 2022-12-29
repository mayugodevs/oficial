<div>
    <input type="text" wire:model.defer="mensaje" placeholder="Ingrese comentario/pregunta">
    <input type="button" value="Comentar" wire:click="comentarLive">
    <script>
        window.addEventListener('name-updated', event => {
            alert('Name updated to: ' + event.detail.newName);
        })
    </script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('d4e5166d0e59392a23cb', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('l-channel');
        channel.bind('l-event', function(data) {
        //   alert(JSON.stringify(data));
            window.livewire.emit('postAdded',data)
        });
      </script>
</div>

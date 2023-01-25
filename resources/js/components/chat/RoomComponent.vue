<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat Room</div>

                    <div id="chat-box" class="card-body bg-secondary">
                        <div class="media bg-light rounded">
                            <div class="media-body m-2">
                                <h2 class="mt-0">Username</h2>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sit amet quod
                                molestias! Animi error minus, facere facilis dignissimos eius quaerat optio ab
                                architecto ut molestias amet quod quas totam.
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <p class="text-muted">Username typing...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Users Online</div>
                    <div id="user-online" class="card-body bg-secondary">
                        <ul class="list-group">
                            <li class="list-group-item">Username</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        Echo.join('chat')
            .listen('ChatSend', (e) => {
                console.log(e);
            });
    }
}
</script>

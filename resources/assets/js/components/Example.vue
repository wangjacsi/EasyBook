<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        ready() {
            console.log('Component ready');


        },
        mounted() {
            console.log('Component mounted.');
/*
            this.$http.get('api/user', { headers: { Authorization: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImRlNWJmZTNmYjVjMjVhMGRiOGI0N2ZkNDY3N2Q0ZjI1ZjdmNTA3NjQ3ZmQwMDE3OTU3ZmMzMTA3YTlmM2YxNjYxMWIzODdmYmRlY2M4MWMwIn0.eyJhdWQiOiIxIiwianRpIjoiZGU1YmZlM2ZiNWMyNWEwZGI4YjQ3ZmQ0Njc3ZDRmMjVmN2Y1MDc2NDdmZDAwMTc5NTdmYzMxMDdhOWYzZjE2NjExYjM4N2ZiZGVjYzgxYzAiLCJpYXQiOjE1MDAzMzU1NzAsIm5iZiI6MTUwMDMzNTU3MCwiZXhwIjoxNTMxODcxNTcwLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.tK59Qzgh3xBmUCt9EpzwLuMW7kc-Stf8WKKcW8Iluv96WbpXcUVsDt28GXNy-9ihWkl2tVXk7H-EdmaKvzZnPULneIbrtHlVpbN7PVygy-dUEzv2qhPWL4IPw2x9hhPv_YvYVcqNm-SY9O9JLqvw4bkCmxg81K6TjrteMpJrbQzS2_ysi72sq-ZsPGNwXnzvwi8WC3caVc59730HBjw9-AwicU4I9u9YilHTrIzky7tMXw4Kzx7735RO_xYzwGFjWFLoHlDyxhUUPGlQ40Lc6mcueVAWI0dddHKnEy6LK7R-dYY3VCD-Cjpy7YFI4-3UwAv91l4ZrQI-9-QL5YyXAEtfXm2y5F4HoEuaZvTXbR7d1FqBl8iKFfXMbYt0bHJXT4_x7jPST2sCRJC0FddVx35CoKlgNxJbsh2LSUqRtR8yNwwXBHcldWcUuBGvZspGBt1NlsLoC6X7XNaseZWUpOiIwZmtjAz2SBGej4zHgN9Zf376gFXq4pr_NgrmtrIlbIc72onz4mJOlIcM3fdRWNp8fXImgZBxfuS9m9ZLnIdZ5dZheLJH0A9KOTo6gtgxYlHpmcGxSSmFG0nBf_84jDteOK-ttLhWxjDPMjUFpApwMHbznwlMaHHUBAG4EAszcGhZS_vf7DMIF3Dfox4PA93IlctlnpuOVE-DE2NuSyU'} })
            .then(response => {
                console.log(response.data);
            })

            */
        }
    }
</script>

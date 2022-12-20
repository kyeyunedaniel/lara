var listing = 
{
    'store_asset_movements_requests_owner' : {
        'url' : "{{ route('asset-borrow.index.getlist') }}",
        'cols' : [
            { name: 'id' },
            { name: 'Request_Date' },
            { name: 'Request_By' },
            { name: 'Summary' },
        ]
        },

}
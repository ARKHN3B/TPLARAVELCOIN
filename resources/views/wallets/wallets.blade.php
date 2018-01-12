@extends('.layouts/app')

@section('content')

    <span style="float: right; margin-right: 2.6%">
        <button type="button" class="btn btn-primary">Add a wallet</button>
        <button type="button" class="btn btn-danger">Transfer</button>
    </span>

    <table style="width: 100%; table-layout: fixed">
        <tr class="emcoin" style="border-bottom: 2px solid #8e9294">
            <th class="thcoin" style="width: 7.5%; visibility: hidden">nothing</th>
            <th class="thcoin" style="width: 15%">Name</th>
            <th class="thcoin" style="width: 44%">Wallet ID</th>
            <th class="thcoin">Available balance</th>
            <th class="thcoin" style="width: 10%; visibility: hidden">nothing</th>
        </tr>
        <tr class="emcoin emtdcoin">
            <td class="tdcoin">
                <a data-original-title="Broadcast Message"
                   data-toggle="tooltip"
                   type="button"
                   class="btn btn-sm btn-primary"
                   title="Add a wallet">╋</a>
            </td>
            <td class="tdcoin">Bitcoin</td>
            <td class="tdcoin">rdfiyg122iu13983b12p873hb123y712093hin</td>
            <td class="tdcoin">0.3743243244</td>
            <td class="tdcoin">
                <a href="edit.html"
                   data-original-title="Edit this user"
                   data-toggle="tooltip"
                   type="button"
                   class="btn btn-sm btn-warning"
                   title="Copy to clipboard">⚡</a>
                <a data-original-title="Remove this user"
                   data-toggle="tooltip"
                   type="button"
                   class="btn btn-sm btn-danger" title="Delete">╳</a>
            </td>
        </tr>
    </table>
@endsection
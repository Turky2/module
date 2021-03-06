@extends('mails.layout')
@section('content')
    <center class="wrapper" data-link-color="#fe5d61" data-body-style="font-size: 16px; font-family:helvetica,arial,sans-serif; color: #8d9db9; background-color: #f2f4fb;">
        <div class="webkit">
            <table cellpadding="0" cellspacing="0" border="0" width="100%" class="wrapper" bgcolor="#f2f4fb">
                <tr>
                    <td valign="top" bgcolor="#f2f4fb" width="100%">
                        <table width="100%" role="content-container" class="outer" align="center" cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td width="100%">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td>
                                                <center>
                                                    <table>
                                                        <tr>
                                                            <td width="600">
                                                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width:600px;" align="center">
                                                                    <tr>
                                                                        <td role="modules-container" style="padding: 0px 0px 0px 0px; color: #8d9db9; text-align:left;" bgcolor="#f2f4fb" width="100%" align="left">
                                                                            <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                <tr>
                                                                                    <td style="font-size:6px;line-height:10px;padding:15px;background-color: #fff;" valign="top" align="center">
                                                                                        <img class="max-width" border="0" style="display:block;color:#000000;text-decoration:none;font-family:Helvetica,arial,sans-serif;font-size:16px;max-width:38%!important;width:160px;height:50px !important;float: right;" src="{{asset('assets/img/mails/Logo.png')}}" alt="" width="600">
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <table class="wrapper" role="module" data-type="image" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                <tr>
                                                                                    <td style="font-size:6px;line-height:10px;padding:0px
                                                        0px 0px 0px;" valign="top" align="center"></td>
                                                                                </tr>
                                                                            </table>

                                                                            <table class="module" role="module" data-type="text" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                <tr>
                                                                                    <td style="background-color:#F8F8FB;padding:25px 0px 10px 0px;line-height:22px;text-align:inherit;" height="100%" valign="top" bgcolor="#39437C">
                                                                                        <div style="text-align:center;color:#29294D;font-size:24px"><strong><span class="author-d-1gg9uz65z1iz85zgdz68zmqkz84zo2qovvuiz70zivz70zz82zpz73zis3z79zz89zlz65zsvjjbhz85zz70zz81ztz86zhuz89z"> {{ trans('hello') }} </span><span class="author-d-1gg9uz65z1iz85zgdz68zmqkz84zo2qovvuiz70zivz70zz82zpz73zis3z79zz89zlz65zsvjjbhz85zz70zz81ztz86zhuz89zs-lsquo"> </span><span class="author-d-1gg9uz65z1iz85zgdz68zmqkz84zo2qoxwz83zz71z2z84ztln7xjz86zz79z2z88zaz84zmz71zz122zz90zs1ez87zz70zsz75zz87zlz89zh-lsquo">"</span><span class="author-d-1gg9uz65z1iz85zgdz68zmqkz84zo2qovvuiz70zivz70zz82zpz73zis3z79zz89zlz65zsvjjbhz85zz70zz81ztz86zhuz89zh-lsquo"> {{ " ".$user['first_name']." ".$user['last_name'] }}</span></strong></div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <table class="module" role="module" data-type="code" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;" >
                                                                                <tr>
                                                                                    <td height="100%" valign="top">
                                                                                        <div class="col-lg-12"
                                                                                             style="background-color:#F8F8FB;padding:20px">
                                                                                            <div style="text-align: right;"><span style="font-family: 'Sarabun',sans-serif; line-height:20px;"><span style="color:#29294D;">{{ trans('order_submitted_successfully_message') }}</span></span></div>
                                                                                            <div style="text-align: right;">&nbsp;</div>
                                                                                            <div style="text-align: right;">
                                                                                                <span style="font-family: 'Sarabun',sans-serif;line-height:20px;">
                                                                                                  <span style="color:#7E7E94;font-weight:600;line-height:50px;">{{ trans('order_id') }}
                                                                                                  </span> {{ $order->id }} <br>
                                                                                                </span>
                                                                                            </div>
                                                                                            <div style="text-align: right;">&nbsp;</div>
                                                                                            <table cellpadding="10" width="100%" cellpadding="10"  class="table-responsive" style="border-color: white;float: right; text-align: right">
                                                                                                <tr width="15%" >
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('product_name') }}</span></label>
                                                                                                    </td>
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('quantity') }}</span></label>
                                                                                                    </td>
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('price') }}</span></label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                @foreach ($order->products as $product)
                                                                                                    <tr width="15%" >
                                                                                                        <td style="padding: 5px">
                                                                                                            <div class="col-sm-12">
                                                                                                                {{ $product->product?$product->product->name:'-' }}
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px">
                                                                                                            <div class="col-sm-12">
                                                                                                                {{ $product->pivot->quantity }}
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px">
                                                                                                            <div class="col-sm-12">
                                                                                                                {{ $product->pivot->price }}
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endforeach
                                                                                                <tr><td colspan="3"><hr></td></tr>
                                                                                                @if(isset($order->branch->zones->where('id', $order->address->location->id)[0]))
                                                                                                <tr width="15%" >
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('delivery_fee') }}</span></label>
                                                                                                    </td>
                                                                                                    <td style="padding: 5px"></td>
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label">{{ $order->branch->zones->where('id', $order->address->location->id)[0]->pivot->delivery_fee }}</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                @endif
                                                                                                <tr width="15%" >
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('total_price') }}</span></label>
                                                                                                    </td>
                                                                                                    <td style="padding: 5px"></td>
                                                                                                    <td style="padding: 5px">
                                                                                                        <label for="content" class="col-sm-12 control-label">{{ $order->total_price }}</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                @if($order->final_amount)
                                                                                                    <tr width="15%" >
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('promo_code') }}</span></label>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px"></td>
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label">{{ $order->promo_code }}</label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr width="15%" >
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('points_used') }}</span></label>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px"></td>
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label">{{ $order->points_used }}</label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr width="15%" >
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ trans('final_amount') }}</span></label>
                                                                                                        </td>
                                                                                                        <td style="padding: 5px"></td>
                                                                                                        <td style="padding: 5px">
                                                                                                            <label for="content" class="col-sm-12 control-label"><span style="color: #7E7E94;font-weight: 600;line-height:50px;">{{ $order->final_amount }}</span></label>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                @endif
                                                                                            </table>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <table class="module" role="module" data-type="code" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
                                                                                <tr>
                                                                                    <td height="100%" valign="top">
                                                                                        <div class="" style="background-color:#D94962;height:20px;padding:20px">
                                                                                            <span style="color: #fff;">{{ trans('available_on') }}</span>
                                                                                            <a href="https://www.playstore.net">
                                                                                                <img style="height:24px;width:24px;margin-right:10px;float:left" src="{{asset('assets/img/mails/playstore.png')}}">
                                                                                            </a>
                                                                                            <a href="https://www.appstore.com">
                                                                                                <img style="height:24px;width:24px;margin-right:10px;float:left" src="{{asset('assets/img/mails/appstore.png')}}">
                                                                                            </a>

                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </center>
@endsection

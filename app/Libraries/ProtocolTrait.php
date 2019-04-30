<?php

namespace App\Libraries;

use Illuminate\Support\Arr;

trait ProtocolTrait
{
    /**
     * Json response 형식 통일 (일반 response)
     *
     * @param array $params
     *
     * @return json
     */
    protected function response(array $params)
    {
        $result = [
            'result'  => Arr::get($params, 'result', 'ok'),
            'message' => Arr::get($params, 'message', ''),
            'data'    => Arr::get($params, 'data'),
        ];

        return response()->json($result);
    }

    /**
     * Json response 형식 통일 (오류 response)
     *
     * @param array $params
     *
     * @return json
     */
    protected function errorResponse(array $params)
    {
        return $this->response([
            'result'  => 'error',
            'message' => Arr::get($params, 'message', ''),
            'data'    => Arr::get($params, 'data'),
        ]);
    }
}

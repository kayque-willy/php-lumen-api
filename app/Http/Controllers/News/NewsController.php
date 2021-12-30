<?php

namespace App\Http\Controllers\News;

use App\Helpers\OrderByHelper;
use App\Http\Controllers\AbstractController;
use App\Services\News\NewsService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends AbstractController
{
    protected array $searchFields = [
        'title',
        'slug',
        'subtitle'
    ];

    // ------------------- IMPORTANTE -------------------
    // -------- INJEÇÃO DE DEPENDENCIA DO SERVICE  --------
    // Aqui é definido o tipo do serviço para ser injetado.
    public function __construct(NewsService $service)
    {
        // A injeção das dependencias:
        //     - NewsService.php
        //     - NewsRepository.php
        //     - News.php
        // são feitas por chamada de hierarquia no arquivo
        // "app/providers/AuthorServiceProvider.php"
        // O provider também deve ser declarado no arquivo:
        // "/bootstrap/app.php"
        parent::__construct($service);
    }

    public function findByAuthor(Request $request, int $author_id): JsonResponse
    {
        try {
            $limit = (int) $request->get('limit', 10);
            $orderBy = $request->get('order_by', []);

            if (!empty($orderBy)) {
                $orderBy = OrderByHelper::treatOrderBy($orderBy);
            }

            $result = $this->service->findByAuthor($author_id, $limit, $orderBy);

            $response = $this->successResponse($result, Response::HTTP_PARTIAL_CONTENT);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }


    public function findBy(Request $request, string $param): JsonResponse
    {
        try {
            $result = $this->service->findBy($param);
            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }


    public function deleteBy(Request $request, string $param): JsonResponse
    {
        try {
            $result['deletado'] = $this->service->deleteBy($param);
            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }


    public function deleteByAuthor(Request $request, int $author_id): JsonResponse
    {
        try {
            $result['deletado'] = $this->service->deleteByAuthor($author_id);
            $response = $this->successResponse($result);
        } catch (Exception $e) {
            $response = $this->errorResponse($e);
        }

        return response()->json($response, $response['status_code']);
    }
}

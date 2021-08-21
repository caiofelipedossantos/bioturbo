<?php

namespace App\Repositories\Core;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Exceptions\NotModelDefined;

/**
 *  Classe responsável por disponibilizar funções bases utilizadas pelo eloquent.
 *
 * @author      Caio Felipe <caio@digidata.com.br>
 * @since       2021-04-12
 * @version     1.7.0
 */
class BaseEloquentRepository implements RepositoryInterface
{
    //Variavel que vai armzenar o modelo de dados a ser utilizado
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    /**
     * Função responsável por buscar todos os resultados ativos.
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * Função responsável por buscar os dados de acordo com o UUID.
     */
    public function findByUuid(string $uuid)
    {
        return $this->model->where('uuid', $uuid)->first();
    }

    /**
     * Função responsável por buscar os dados de acordo com o UUID, podendo selecionar
     * quais colunas serão utilizadas como critério de seleção.
     *
     * @param   string      $uuid       Código UUID.
     * @param   array       $columns    Colunas a serem utilizadas no SELECT
     */
    public function findByUuidFilterColumns(string $uuid, array $columns)
    {
        return $this->model->select($columns)->where('uuid', $uuid)->first();
    }

    /**
     * Função responsável por buscar os dados de acordo com a condicional desejada.
     *
     * @param   string      $column       Coluna a ser utilizada na condicional WHERE.
     * @param   string      $value        Valor a ser utilizada na condicional WHERE.
     */
    public function findWhere(string $column, string $value)
    {
        return $this->model->where($column, $value)->get();
    }

    /**
     * Função responsável por buscar os dados de acordo com a condicional desejada utilizando o LIKE.
     *
     * @param   string      $column       Coluna a ser utilizada na condicional WHERE.
     * @param   string      $value        Valor a ser utilizada na condicional WHERE.
     */
    public function findWhereLike(string $column, string $value)
    {
        return $this->model->where($column, 'LIKE', "%{$value}%")->get();
    }

    /**
     * Função responsável por buscar o unico resultado de acordo com a condicional desejada.
     *
     * @param   string      $column       Coluna a ser utilizada na condicional WHERE.
     * @param   string      $value        Valor a ser utilizada na condicional WHERE.
     */
    public function findWhereFirst(string $column, string $value)
    {
        return $this->model->where($column, $value)->first();
    }

    /**
     * Função responsável por cadastrar um novo registro.
     *
     * @param   array      $data       Array contendo as colunas e seus valores.
     * @return  bool
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Função responsável por atualizar registro de acordo com o UUID informado.
     *
     * @param   string     $uuid       Código UUID.
     * @param   array      $data       Array contendo as colunas e seus valores.
     *
     * @return  bool
     */
    public function updateByUuid(string $uuid, array $data)
    {
        return $this->findByUuid($uuid)->update($data);
    }

    /**
     * Função responsável por deletar (softdelete) um registro de acordo com o UUID informado.
     *
     * @param   string     $uuid       Código UUID.
     * @return  bool
     */
    public function deleteByUuid(string $uuid)
    {
        return $this->findByUuid($uuid)->delete();
    }

    /**
     * Função responsável por efetuar a ordenação dos resultados.
     *
     * @param   string     $column      Coluna a ser ordenada.
     * @param   string     $order       Sentido da ordenação - ASC ou DESC.
     *
     * @return  object    Retorna o próprio objeto para poder efetuar o encadeamento das funções.
     */
    public function orderBy(string $column, string $order)
    {
        $this->model = $this->model->orderBy($column, $order);
        return $this;
    }

    /**
     * Função responsável por efetuar a seleção das colunas a serem exibidas no SELECT.
     *
     * @param   mixed     $column      Array contendo as colunas a serem exibidas, o ... possibita o envio dos dados separados por uma vírgula.
     *
     * @return  object    Retorna o próprio objeto para poder efetuar o encadeamento das funções.
     */
    public function columns(...$columns)
    {
        $this->model = $this->model->select($columns);
        return $this;
    }

    /**
     * Função responsável por efetuar a chamada dos relacionamentos utilizando o WITH.
     *
     * @param   mixed     $relationships      Array contendo os relacionamentos, o ... possibita o envio dos dados separados por uma vírgula.
     *
     * @return  object    Retorna o próprio objeto para poder efetuar o encadeamento das funções.
     */
    public function relationships(...$relationships)
    {
        $this->model = $this->model->with($relationships);
        return $this;
    }

    /**
     * Função responsável por verificar se o Model a ser utilizado foi adicionado.
     *
     */
    public function resolveModel()
    {
        if (!method_exists($this, 'model')) {
            throw new NotModelDefined();
        }

        return app($this->model());
    }
}

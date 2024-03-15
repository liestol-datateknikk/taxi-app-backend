<?php
use OpenApi\Annotations as OA;
// app/swagger_annotations.php

/**
 * @OA\Post(
 *      path="/api/users",
 *      operationId="createUser",
 *      tags={"Users"},
 *      summary="Create a new user",
 *      description="Create a new user with the provided details",
 *      ...
 * )
 */
 /**
     * @OA\Get(
     *      path="/api/users/{id}",
     *      operationId="getUserById",
     *      tags={"Users"},
     *      summary="Get user details",
     *      description="Get details of a user by ID",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="User details retrieved successfully",
     *          @OA\JsonContent(ref="#/components/schemas/User")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="User not found",
     *      ),
     *      security={
     *          {"bearerAuth": {}}
     *      }
     * )
     */
function createUserSwaggerAnnotation()
{
     
}

/**
 * @OA\Get(
 *      path="/api/users/{id}",
 *      operationId="getUserById",
 *      tags={"Users"},
 *      summary="Get user details",
 *      description="Get details of a user by ID",
 *      ...
 * )
 */
function getUserByIdSwaggerAnnotation()
{
  
}

/**
     * @OA\Put(
     *      path="/api/users/{id}",
     *      operationId="updateUser",
     *      tags={"Users"},
     *      summary="Update user details",
     *      description="Update details of a user by ID",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="name", type="string"),
     *              @OA\Property(property="email", type="string", format="email"),
     *              @OA\Property(property="password", type="string", format="password", minLength=8)
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="User updated successfully",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="User not found",
     *      ),
     *      security={
     *          {"bearerAuth": {}}
     *      }
     * )
     */
function updateUserByIdSwaggerAnnotation()
{
}

  /**
     * @OA\Delete(
     *      path="/api/users/{id}",
     *      operationId="deleteUser",
     *      tags={"Users"},
     *      summary="Delete user",
     *      description="Delete a user by ID",
     *      @OA\Parameter(
     *          name="id",
     *          in="path",
     *          description="ID of the user",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="User deleted successfully",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="User not found",
     *      ),
     *      security={
     *          {"bearerAuth": {}}
     *      }
     * )
     */
function deleteUserByIdSwaggerAnnotation()
{
}

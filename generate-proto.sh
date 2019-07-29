# Generate protobuf files
protoc -I proto --php_out=src --grpc_out=src --plugin=protoc-gen-grpc=`which grpc_php_plugin` proto/*.proto
